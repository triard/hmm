<div class="container">
    <form action="">
        <div class="input-form">
            <input type="text" name="id_user" id="id_user" class="form-control" placeholder="Name" value="<?php echo $id_ses; ?>">
        </div>
        <?php $a = $ticket['id_ticket']; ?>
        <div class="input-form">
            <input type="text" name="id_ticket" id="id_ticket" class="form-control" placeholder="Name" value="<?php echo $a; ?>">
        </div>
        <div class="input-form">
            <input type="text" name="date" id="date" class="form-control" placeholder="Name" value="<?php echo date('Y/m/d'); ?>">
        </div>
        <button type="submit">BAyar</button>
    </form>
</div>