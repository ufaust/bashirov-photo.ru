<?php
function to_bd() {
$db_connect = new mysqli("localhost", "********","********", "********");
if ($db_connect->connect_error) {
    die('Connect Error (' . $db_connect->connect_errno . ') ' . $db_connect->connect_error);
}
$head = $_POST['post_header'];
$body = $_POST['editor1'];
$post = $_POST['post_script'];

if(isset($_POST['submit'])) {
$query_post = "INSERT INTO blog (head, body, post) VALUES ('$head', '$body', '$post')";
mysqli_query($db_connect, $query_post);
  }
}

function post_msg() {
$db_connect = new mysqli("localhost", "********","********", "********");
if ($db_connect->connect_error) {
    die('Connect Error (' . $db_connect->connect_errno . ') ' . $db_connect->connect_error);
}
$query_post = "SELECT * FROM blog ";
$result_post = mysqli_query($db_connect, $query_post, MYSQLI_USE_RESULT);
while($row = mysqli_fetch_array($result_post))
{
  ?>
  <div class="container">
    <div class="col-md-5 col-md-offset-1">

  <i><?=$row['date']?></i>
  <h3><?=$row['head']?></h3>
  <p class="text"><?=$row['body']?>
</p>
	<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//bashirov-photo.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<hr>
</div>
  </div>
  <br>
   <?php
}
}



function to_img() {
  $db_connect = new mysqli("localhost", "********","********", "********");
  if ($db_connect->connect_error) {
      die('Connect Error (' . $db_connect->connect_errno . ') ' . $db_connect->connect_error);
  }
  $title = $_POST['title'];
  $add_img = $_POST['add_img'];
  $preview_img = $_POST['preview_img'];
  if(isset($_POST['subm'])) {
  $query_post = "INSERT INTO img_links (title, add_img, preview_img) VALUES ('$title', '$add_img', '$preview_img')";
  mysqli_query($db_connect, $query_post);
    }
  }

  function post_img() {
  $db_connect = new mysqli("localhost", "********","********", "********");
  if ($db_connect->connect_error) {
      die('Connect Error (' . $db_connect->connect_errno . ') ' . $db_connect->connect_error);
  }
  $query_post = "SELECT * FROM img_links ";
  $result_post = mysqli_query($db_connect, $query_post, MYSQLI_USE_RESULT);
  while($row = mysqli_fetch_array($result_post))
  {
    ?>
    <a href="<?=$row['add_img']?>" title="<?=$row['title']?>" data-gallery>
        <img src="<?=$row['preview_img']?>" alt="photo">
    </a>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    <?
  }
  }
?>
