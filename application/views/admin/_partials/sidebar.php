<!-- Sidebar -->
<ul class="sidebar navbar-nav" style="position:fixed;top:55;left:0;z-index: 99;"> 
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? : '' ?>">
        <a class="nav-link" href="<?php echo site_url('Overview') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>CategoryClient/">
        <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Category</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>TicketClient/getProduct">
        <i class="fas fa-ticket-alt"></i>
            <span>Ticket</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>TransactionClient/">
        <i class="fas fa-exchange-alt"></i>
            <span>Transaction</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>UsersClient/">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
</ul>
