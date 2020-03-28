<div id="contact-social-footer">
    <ul class="contact-social-footer">

        <!-- Facebook -->
        <?php if (!empty($facebook)) : ?>
            <li>
                <a href="<?php echo $facebook; ?>" target="_blank" class="facebook">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Telefone -->
        <?php if (!empty($phone)) : ?>
            <li>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone); ?>" target="_blank" class="phone">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Instagram -->
        <?php if (!empty($instagram)) : ?>
            <li>
                <a href="<?php echo $instagram; ?>" target="_blank" class="instagram">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Linkedin -->
        <?php if (!empty($linkedin)) : ?>
            <li>
                <a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Twitter -->
        <?php if (!empty($twitter)) : ?>
            <li>
                <a href="<?php echo $twitter; ?>" target="_blank" class="twitter">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Youtube -->
        <?php if (!empty($youtube)) : ?>
            <li>
                <a href="<?php echo $youtube; ?>" target="_blank" class="youtube">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- E-mail -->
        <?php if (!empty($email)) : ?>
            <li>
                <a href="mailto:<?php echo $email; ?>" target="_blank" class="email">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- WhatsApp -->
        <?php if (!empty($whatsapp)) : ?>
            <li>
                <a href="https://api.whatsapp.com/send?phone=+55<?php echo $whatsappNumber; ?><?php if (!empty($whatsapp_msg)) echo '&text=' . $whatsapp_msg; ?>" target="_blank" class="whatsapp">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Maps -->
        <?php if (!empty($maps)) : ?>
            <li>
                <a href="<?php echo $maps; ?>" target="_blank" class="maps">
                    <span></span>
                </a>
            </li>
        <?php endif; ?>

    </ul>

</div>