<div id="contact-social">
    <ul class="contact-social">

        <!-- WhatsApp -->
        <?php if (!empty($whatsapp)): ?>
            <li>
                <a href="https://api.whatsapp.com/send?phone=+55<?php echo $whatsappNumber; ?><?php if (!empty($whatsapp_msg)) echo '&text=' . $whatsapp_msg; ?>" target="_blank" class="icon-whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
            <li>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $whatsappNumber); ?>" target="_blank" class="whatsapp">
                    <span><?php echo $whatsapp; ?></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Telefone -->
        <?php
        if (!empty($phone)): ?>
            <li>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone); ?>" target="_blank" class="phone">
                    <span><?php echo $phone; ?></span>
                </a>
            </li>
            <li>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone); ?>" target="_blank" class="phone">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- Facebook -->
        <?php if (!empty($facebook)): ?>
            <li>
                <a href="<?php echo $facebook; ?>" target="_blank" class="facebook">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- Twitter -->
        <?php if (!empty($twitter)): ?>
            <li>
                <a href="<?php echo $twitter; ?>" target="_blank" class="twitter">
                    <i class="fab fa-twitter-square"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- Youtube -->
        <?php if (!empty($youtube)): ?>
            <li>
                <a href="<?php echo $youtube; ?>" target="_blank" class="youtube">
                    <i class="fab fa-youtube-square"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- Instagram -->
        <?php if (!empty($instagram)): ?>
            <li>
                <a href="<?php echo $instagram; ?>" target="_blank" class="instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- Linkedin -->
        <?php if (!empty($linkedin)): ?>
            <li>
                <a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif; ?>

        <!-- E-mail -->
        <?php if (!empty($email)): ?>
            <li>
                <a href="mailto:<?php echo $email; ?>" target="_blank" class="email">
                    <i class="fas fa-envelope"></i>
                    <?= $email ?>
                </a>
            </li>
        <?php endif; ?>
        
    </ul>

</div>