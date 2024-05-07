<div class="cite-container">
        <h4 class='cite-title'>Cita que me inspira</h4>

            <p class='cite-p'>'Para que cualquier cosa suceda, primero hay que hacer algo' <br><cite class='cite-author'>- Albert Einstein</cite></p>
            <i class="fas fa-feather cite-icon"></i>
</div>
<?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <div class="info-author__container">
    <h2><?php echo $curauth->display_name; ?></h2>
    <dl>
        <dt class="def">Website</dt>
        <dd><a class="url" href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt class="def">Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>
    </div>