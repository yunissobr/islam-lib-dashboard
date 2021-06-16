<?php
class Pages extends Controller
{
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/');
    }

    $this->tasbeeh_model = $this->model('Tasbeeh');
    $this->article_model = $this->model('Article');
    $this->dhiker_model = $this->model('Dhiker');
    $this->asset_model = $this->model('Asset');
  }

  public function index()
  {
    if (isLoggedIn()) {
      redirect('pages/tasbeeh');
    } else {
      redirect('users/');
    }
  }

  public function tasbeeh($action = '')
  {

    if (isset($_POST['add_tasbeeh'])) {

      $tasbeeh = $_POST['tasbeeh'];
      $this->tasbeeh_model->save($tasbeeh);

      redirect('pages/tasbeeh/');
    }
    if (isset($_POST['edit_tasbeeh'])) {
      $tasbeeh_id = $_POST['tasbeeh_id'];
      $tasbeeh = $_POST['tasbeeh'];
      $this->tasbeeh_model->edit($tasbeeh, $tasbeeh_id);
      redirect('pages/tasbeeh/edit&tasbeeh_id=' . $tasbeeh_id);
    }

    if ($action == 'add') {

      $data = [];
      $this->view('pages/tasbeeh/add', $data);
    } elseif ($action == 'edit') {

      $tasbeeh_id = $_GET['tasbeeh_id'];
      $data = [
        'current_tasbeeh' => $this->tasbeeh_model->sel_by_id($tasbeeh_id),

      ];
      $this->view('pages/tasbeeh/edit', $data);
    } elseif ($action == 'del') {

      $tasbeeh_id = $_GET['tasbeeh_id'];
      $this->tasbeeh_model->del($tasbeeh_id);
      redirect('pages/tasbeeh/');
    } else {

      $data = [
        'tasbeehs' => $this->tasbeeh_model->sel_all(),
      ];

      $this->view('pages/tasbeeh/index', $data);
    }
  }


  public function articles($action = '')
  {

    if (isset($_POST['add_article'])) {

      $title = $_POST['title'];
      $content = $_POST['content'];
      $type = $_POST['type'];
      $article = [
        'title' => $title,
        'content' => $content,
        'type' => $type,
      ];

      $this->article_model->save($article);

      redirect('pages/articles/&type=' . $_POST['type']);
    }
    if (isset($_POST['edit_article'])) {
      $article_id = $_POST['article_id'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $type = $_POST['type'];
      $article = [
        'id' => $article_id,
        'title' => $title,
        'content' => $content,
        'type' => $type,
      ];
      $this->article_model->edit($article);
      redirect('pages/articles/edit&article_id=' . $article_id);
    }

    if ($action == 'add') {
      $this->view('pages/article/add', []);
    } elseif ($action == 'edit') {

      $article_id = $_GET['article_id'];
      $data = [
        'current_article' => $this->article_model->sel_by_id($article_id),

      ];
      $this->view('pages/article/edit', $data);
    } elseif ($action == 'del') {

      $article_id = $_GET['article_id'];
      $this->article_model->del($article_id);
      redirect('pages/articles//&type=' . $_GET['type']);
    } else {

      $data = [
        'articles' => $this->article_model->sel_by_type($_GET['type'] ?? 0),
      ];

      $this->view('pages/article/index', $data);
    }
  }


  public function adhkar($action = '')
  {

    if (isset($_POST['add_dhiker'])) {

      $dhiker = $_POST['dhiker'];
      $repetitions = $_POST['repetitions'];
      $type = $_POST['type'];
      $dhiker = [
        'dhiker' => $dhiker,
        'repetitions' => $repetitions,
        'type' => $type,
      ];

      $this->dhiker_model->save($dhiker);

      redirect('pages/adhkar/&type=' . $_POST['type']);
    }
    if (isset($_POST['edit_dhiker'])) {
      $dhiker_id = $_POST['dhiker_id'];
      $dhiker = $_POST['dhiker'];
      $repetitions = $_POST['repetitions'];
      $type = $_POST['type'];
      $dhiker = [
        'id' => $dhiker_id,
        'dhiker' => $dhiker,
        'repetitions' => $repetitions,
        'type' => $type,
      ];
      $this->dhiker_model->edit($dhiker);
      redirect('pages/adhkar/edit&dhiker_id=' . $dhiker_id);
    }

    if ($action == 'add') {
      $this->view('pages/dhiker/add', []);
    } elseif ($action == 'edit') {

      $dhiker_id = $_GET['dhiker_id'];
      $data = [
        'current_dhiker' => $this->dhiker_model->sel_by_id($dhiker_id),

      ];
      $this->view('pages/dhiker/edit', $data);
    } elseif ($action == 'del') {

      $dhiker_id = $_GET['dhiker_id'];
      $this->dhiker_model->del($dhiker_id);
      redirect('pages/adhkar/&type=' . $_GET['type']);
    } else {

      $data = [
        'adhkar' => $this->dhiker_model->sel_by_type($_GET['type'] ?? 0),
      ];

      $this->view('pages/dhiker/index', $data);
    }
  }

  public function assets($action = '')
  {

    if (isset($_POST['add_asset'])) {


      $asset = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'type' => $_POST['type'],
        'section' => LEARN_HOW_TO_PRAY_SECTION,
        'file_content' => '',
      ];

      $file = [
        'file' => $_FILES['file_content'],
        'target_folder' => 'upload/' . ($asset['type'] == VIDEOS ? 'videos' : ($asset['type'] == SOUNDS ? 'sounds' : 'images')) . '/'
      ];

      $file_name = upload_file($file);

      if ($file_name) {
        $asset['file_content'] = $file['target_folder'] . $file_name;
        $this->asset_model->save($asset);
        redirect('pages/assets/&type=' . $_POST['type']);
      } else {
        die('THERE WAS AN ERROR UPLOADING YOUR FILE');
      }
    }
    if (isset($_POST['edit_asset'])) {
      $asset_id = $_POST['asset_id'];
      $current_asset = $this->asset_model->sel_by_id($asset_id);
      $asset = [
        'id' => $_POST['asset_id'],
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'type' => $_POST['type'],
        'section' => LEARN_HOW_TO_PRAY_SECTION,
        'file_content' => $current_asset->file_content,
      ];
      if ($_FILES['file_content']['size'] != 0) {
        $file = [
          'file' => $_FILES['file_content'],
          'target_folder' => 'upload/' . ($asset['type'] == VIDEOS ? 'videos' : ($asset['type'] == SOUNDS ? 'sounds' : 'images')) . '/'
        ];

        $file_name = upload_file($file);
        if ($file_name) {
          $asset['file_content'] = $file['target_folder'] . $file_name;
          $this->asset_model->edit($asset);
          redirect('pages/assets/edit&asset_id=' . $asset_id);
        } else {
          die('THERE WAS AN ERROR UPLOADING YOUR FILE');
        }
      } else {
        $this->asset_model->edit($asset);
        redirect('pages/assets/edit&asset_id=' . $asset_id);
      }
    }

    if ($action == 'add') {
      $this->view('pages/assets/add', []);
    } elseif ($action == 'edit') {

      $asset_id = $_GET['asset_id'];
      $data = [
        'current_asset' => $this->asset_model->sel_by_id($asset_id),

      ];
      $this->view('pages/assets/edit', $data);
    } elseif ($action == 'del') {

      $asset_id = $_GET['asset_id'];
      $this->asset_model->del($asset_id);
      redirect('pages/assets/&type=' . $_GET['type']);
    } else {

      $data = [
        'assets' => $this->asset_model->sel_by_type($_GET['type'] ?? 0),
      ];

      $this->view('pages/assets/index', $data);
    }
  }


  public function api($action = 'get_all')
  {
    header('Content-Type: application/json');
    switch ($action) {
      case 'get_tasbeeh':
        echo (json_encode(["tasbeeh" => $this->tasbeeh_model->sel_all()]));
        break;
      case 'get_articles':
        echo (json_encode(["articles" => $this->article_model->sel_all()]));
        break;
      case 'get_assets':
        echo (json_encode(["assets" => $this->asset_model->sel_all()]));
        break;
      case 'get_dhiker':
        echo (json_encode(["azkar" => $this->dhiker_model->sel_all()]));
        break;

      default:
        echo (json_encode(["tasbeeh" => $this->tasbeeh_model->sel_all(), "articles" => $this->article_model->sel_all(), "assets" => $this->asset_model->sel_all(), "azkar" => $this->dhiker_model->sel_all()]));
        break;
    }
  }
}