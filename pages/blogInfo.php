<?php
include 'database/config.php';
include 'components/header.php';

$blogId = $_GET['bid'];
echo $blogId;

$blog=$conn->prepare("SELECT 
b.title,
b.body, 
b.created_at,
b.content, 
b.status,
b.img_url,
u.firstName,
u.surname
FROM blogs b 
inner join users u on b.user_id = u.id
 Where b.id = $blogId");
$blog->execute();
$blog->store_result();
$blog->bind_result($blogTitle, $blogBody, $blogCreatedAt, $blogContent, $status, $blogImg, $blogFName, $blogSName);
$blog->fetch();


$blogComment=$conn->prepare("SELECT
c.comment,
c.created_at,
u.firstName
FROM comments c
inner join users u on c.status = 'Approved'");
$blogComment->execute();
$blogComment->store_result();
$blogComment->bind_result($comment, $commentCreated, $firstName);

?>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white"><?=$blogContent?></h1>

        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96" src="<?=$blogImg?>">
            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                <p class="text-sm text-blue-500 uppercase">category</p> 

                <a href="" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                <?=$blogTitle?>
                </a>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                    <?=$blogBody?>
                </p>

                <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                <div class="flex items-center mt-6">
                    <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="mx-4">
                        <h1 class="text-sm text-gray-700 dark:text-gray-200"><?=$blogFName?> <?=$blogSName?></h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <div>

    <section class="rounded-b-lg  mt-4 ">
    

    <form action="/" accept-charset="UTF-8" method="post"><input type="hidden" >
    <textarea class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="Ask questions here." cols="6" rows="6" id="comment_content" spellcheck="false"></textarea>
    <button class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Comment </button>
    </form>

    <div id="task-comments" class="pt-4">
        <!--     comment-->
    <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
    <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
    
    <?php if ($blogComment->num_rows == 0) : ?>
        <p class="mt-20">No comments have been left yet </p>
    <?php else : ?>

    <?php while($blogComment->fetch()) : ?>
    
    <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left "><?=$firstName?> </h3>
    </div>


    <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left "><?=$comment?> </p>
    <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left "><?=$commentCreated?> </p>

    
    </div>
    </div>
    <?php endwhile ?>
    <?php endif ?>
 
    </section>

    </div>
</section>


<?php
include 'components/footer.php';
?>
