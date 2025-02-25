<?php
include 'database/config.php';
include 'components/header.php';

$blog=$conn->prepare("SELECT id, title, created_at, img_url, content, status FROM blogs Where status ='published'");
$blog->execute();
$blog->store_result();
$blog->bind_result($blogId, $blogTitle, $blogCreatedAt, $blogImg, $blogContent, $status);

?>
<div class="bg-white p-4 font-sans">
      <div class="max-w-5xl max-lg:max-w-3xl max-md:max-w-md mx-auto">
        <h2 class="text-3xl font-extrabold text-gray-800">LATEST BLOGS</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
          <?php while($blog->fetch()) : ?>
            <div class="bg-purple-100 cursor-pointer rounded-md overflow-hidden group">
              <div class="relative overflow-hidden">
                <img src="<?=ROOT_DIR?>assets/images/<?=$blogImg?>" alt="Blog Post 3" class="w-full h-60 object-cover group-hover:scale-125 transition-all duration-300" />
                <div class="px-4 py-2.5 text-white text-sm tracking-wider bg-pink-500 absolute bottom-0 right-0">August 16, 2023</div>
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800"><?= $blogTitle ?></h3>
                <a href="blogInfo?bid=<?=$blogId?>"> 
                <button type="button" class="px-4 py-2 mt-6 rounded-md text-white text-sm tracking-wider border-none outline-none bg-pink-500 hover:bg-pink-600">Read More</button>
                </a> 
              </div>
            </div>
          <?php endwhile?>
        </div>
      </div>
    </div>
<?php
include 'components/footer.php';
?>