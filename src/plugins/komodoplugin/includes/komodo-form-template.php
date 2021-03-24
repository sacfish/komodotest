<?php 
$komodoEntry = include_once(plugin_dir_path( __FILE__ ) . '../includes/komodo-form-entry.php');
?>
<form action="<?php $komodoEntry ?>" method="post" class="komodo-form-wrapper">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="Address">
    <input type="email" placeholder="Email">
    <input type="tel" placeholder="Telephone">
    <textarea placeholder="Message..." rows="5"></textarea>
    <button type="submit" href="#">Submit</button>
</form>
