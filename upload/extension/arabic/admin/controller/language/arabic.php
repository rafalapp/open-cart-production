<?php
namespace Opencart\Admin\Controller\Extension\Arabic\Language;
class Arabic extends \Opencart\System\Engine\Controller {

	private $separator;

	public function __construct($registry) {
		parent::__construct($registry);
		$this->separator = version_compare(VERSION,'4.0.2.3','>=') ? '.' : '|';
	}

	public function index(): void {
		$this->load->language('extension/arabic/language/arabic');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/arabic/language/arabic', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('extension/arabic/language/arabic' . $this->separator . 'save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

		$data['language_arabic_status'] = $this->config->get('language_arabic_status');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/arabic/language/arabic', $data));
	}

	public function save(): void {
		$this->load->language('extension/arabic/language/arabic');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/arabic/language/arabic')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('language_arabic', $this->request->post);

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode('ar');

			$language_info['status'] = (empty($this->request->post['language_arabic_status']) ? '0' : '1');

			$this->model_localisation_language->editLanguage($language_info['language_id'], $language_info);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function replaceInFile($search, $replace, $path) {
		file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
	}

	public function install(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			$language_data = [
				'name'       => 'عربي',
				'code'       => 'ar',
				'locale'     => 'ar.UTF-8,ar,ar,arabic',
				'extension'  => 'arabic',
				'status'     => 1,
				'sort_order' => 1
			];

			$this->load->model('localisation/language');

			$this->model_localisation_language->addLanguage($language_data);

			if (is_dir(DIR_EXTENSION . 'arabic/extension/opencart/')) {
				$this->copyExtensionTranslations(DIR_EXTENSION . '/arabic/extension/opencart/', DIR_EXTENSION . '/opencart/');
			}

		}
		$path = __DIR__ . '/../../../../../admin/view/template/common/header.twig';
		$search = '<meta http-equiv="expires" content="0">';
		$replace = '
        <meta http-equiv="expires" content="0">
		{% if direction == "rtl" %}
		<link href="../extension/arabic/admin/view/stylesheet/bootstrap-rtl.css" rel="stylesheet">
		<link href="{{ icons }}" rel="stylesheet" type="text/css"/>
		<link href="../extension/arabic/admin/view/stylesheet/stylesheet-rtl.css" rel="stylesheet">
		{% else %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../admin/view/template/common/header.twig';
		$search = '<script src="{{ jquery }}" type="text/javascript"></script>';
		$replace = '
        {% endif %}
		<script src="{{ jquery }}" type="text/javascript"></script>
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../catalog/view/template/common/header.twig';
		$search = '<script src="{{ jquery }}" type="text/javascript"></script>';
		$replace = '
        <script src="{{ jquery }}" type="text/javascript"></script>
		{% if direction == "rtl" %}
		<link href="extension/arabic/catalog/view/stylesheet/bootstrap-rtl.css" rel="stylesheet">
		<link href="{{ icons }}" type="text/css" rel="stylesheet"/>
		<link href="extension/arabic/catalog/view/stylesheet/stylesheet-rtl.css" rel="stylesheet">
		{% else %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../catalog/view/template/common/header.twig';
		$search = '<link href="{{ stylesheet }}" type="text/css" rel="stylesheet"/>';
		$replace = '
		<link href="{{ stylesheet }}" type="text/css" rel="stylesheet"/>
		{% endif %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
	}

	public function uninstall(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode('ar');

			if ($language_info) {
				$this->model_localisation_language->deleteLanguage($language_info['language_id']);
			}
		}
		$path = __DIR__ . '/../../../../../admin/view/template/common/header.twig';
		$replace = '<meta http-equiv="expires" content="0">';
		$search = '
        <meta http-equiv="expires" content="0">
		{% if direction == "rtl" %}
		<link href="../extension/arabic/admin/view/stylesheet/bootstrap-rtl.css" rel="stylesheet">
		<link href="{{ icons }}" rel="stylesheet" type="text/css"/>
		<link href="../extension/arabic/admin/view/stylesheet/stylesheet-rtl.css" rel="stylesheet">
		{% else %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../admin/view/template/common/header.twig';
		$replace = '<script src="{{ jquery }}" type="text/javascript"></script>';
		$search = '
        {% endif %}
		<script src="{{ jquery }}" type="text/javascript"></script>
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../catalog/view/template/common/header.twig';
		$replace = '<script src="{{ jquery }}" type="text/javascript"></script>';
		$search = '
        <script src="{{ jquery }}" type="text/javascript"></script>
		{% if direction == "rtl" %}
		<link href="extension/arabic/catalog/view/stylesheet/bootstrap-rtl.css" rel="stylesheet">
		<link href="{{ icons }}" type="text/css" rel="stylesheet"/>
		<link href="extension/arabic/catalog/view/stylesheet/stylesheet-rtl.css" rel="stylesheet">
		{% else %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
		$path = __DIR__ . '/../../../../../catalog/view/template/common/header.twig';
		$replace = '<link href="{{ stylesheet }}" type="text/css" rel="stylesheet"/>';
		$search = '
		<link href="{{ stylesheet }}" type="text/css" rel="stylesheet"/>
		{% endif %}
        ';
		if (file_exists($path)) {
			$this->replaceInFile($search, $replace, $path);
		}
	}

	private function copyExtensionTranslations($src, $dst) : void { 
		$dir = opendir($src); 

		if(!is_dir($dst)) {
			mkdir($dst, 0755);
		}

		while( $file = readdir($dir) ) { 

			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($src . '/' . $file) ) {
					$this->copyExtensionTranslations($src . '/' . $file, $dst . '/' . $file); 
				} else { 
					copy($src . '/' . $file, $dst . '/' . $file); 
				}
			}
		}

		closedir($dir);
	}

}