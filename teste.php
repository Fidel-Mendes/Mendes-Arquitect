<?php
$nome = @$_GET['nome'];
?>
<form action="" method="get">
    <input type="text" name="nome"><br>
    <input type="submit" name="enviar"><br>
</form>
<?php
if(isset($_GET['enviar'])){?>
    <div class="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, accusantium! Iste ea accusantium voluptatibus labore delectus, debitis rem temporibus possimus tempore quisquam nam harum. Quisquam, quaerat. Qui facere aspernatur explicabo.</p>
    </div>

<?php
}
?>

