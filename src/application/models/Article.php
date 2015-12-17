<?php
class Article extends CI_Model {

    public $nid;
    public $title;
    public $author;
    public $content;
    public $createtime;
    public $video_url;
    public $thumb;
    public $type=1;
    public $rank=0;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_articles()
    {
        $article = $this->db->query('select * from article where sid=1')->result_array();
        $subarticle = $this->db->query('select * from article where sid <> 1')->result_array();
        if(!empty($article)){
          foreach ($article as $key => $value) {
            $result[$value['articlename']]= $value;
          }
        }else{
          $result='';
        }
        return $result;
    }
    public function get_article($article_id='')
    {
        return $this->db->query('select * from article where id='.$article_id)->result_array()[0];
    }
    public function getIdFromNid($nav_id='')
    {
      return $this->db->query('select id from article where nid='.$nav_id)->result_array()[0]['id'];
    }
    public function getNidFromId($article_id='')
    {
      return $this->db->query('select nid from article where id='.$article_id)->result_array()[0]['nid'];
    }
    public function create_nav_article($nid='')
    {
        $nav = $this->db->query("select id,navname from nav where id = ".$nid)->result_array()[0];

        return $this->db->insert("article",array("nid" => $nid,"type" => 0,"title" => $nav['navname']));
    }
    public function insert()
    {
        $this->nid  = $this->input->post("nid"); // please read the below note
        $this->title  = $this->input->post("title");
        $this->author  = $this->input->post("author");

        $this->db->insert('article', $this);

        if($id=$this->db->insert_id()){
          // 初始化一篇article
          $values['nid']=$id;
          return $this->db->insert('article',$values);
        }else{
          var_dump($id);exit;
        }
    }
    public function delete($article_id='')
    {
      return $this->db->delete('article',array('id' => $article_id));
    }
    public function update($article_id)
    {
        // $this->title    = $_POST['title'];
        $data['content']  = $_POST['content'];
        // $this->date = time();

        return $this->db->update('article', $data, array('id' => $article_id));
    }
    public function put($value='')
    {
      echo "ok";
    }
}
?>
