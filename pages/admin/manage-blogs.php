<?php
include 'database/config.php';
include 'components/header.php';

$blog=$conn->prepare("SELECT id, title, created_at, img_url, content, status FROM blogs");
$blog->execute();
$blog->store_result();
$blog->bind_result($blogId, $blogTitle, $blogCreatedAt, $blogImg, $blogContent, $status);

?>


 <!-- component -->
<div class="px-3 py-4 flex justify-center">
	<table class="text-left w-full">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4 mr-10">
				<th class="p-4 w-1/4">BlogID</th>
				<th class="p-4 w-1/4">Blog Tite</th>
				<th class="p-4 w-1/4">Blog Content</th>
				<th class="p-4 w-1/4">Status</th>
			</tr>
		</thead>
        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
            <?php while($blog->fetch()) : ?>
                <tr class="flex w-full mb-4 ">
                    <td class="p-4 w-1/4"><?=$blogId?></td>
                    <td class="p-4 w-1/4"><?=$blogTitle?></td>
                    <td class="p-4 w-1/4"><?=$blogContent?></td>
                    <td class="p-4 w-1/4"><?=$status?></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
            <?php endwhile?>  
		</tbody>
          
	</table>
</div>
<?php
include 'components/footer.php';
?>