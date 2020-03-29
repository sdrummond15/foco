<?php
require_once(JPATH_SITE . '/components/com_courses/models/courses.php');
$document = JFactory::getDocument();

foreach ($this->curso as $curso): ?>
    <div class="curso">
        <?php
        $image = 'images/amda.jpg';
        if (!empty($curso->image)) {
            $image = $curso->image;
        }
        ?>
        <div class="curso-img">
            <figure>
                <span style="background-image: url(<?php echo $image; ?>)"></span>
            </figure>
        </div>


        <h1><?php echo $curso->name; ?></h1>

        <?php if ($curso->date_start != '0000-00-00' || $curso->date_end != '0000-00-00'): ?>
            <h3>
                <i class="fas fa-calendar-alt"></i> <?= CoursesModelCourses::convDate($curso->date_start, $curso->date_end); ?>
                <?php if (CoursesModelCourses::convHour($curso->hour_start, $curso->hour_end)): ?>
                    <span>(<?= CoursesModelCourses::convHour($curso->hour_start, $curso->hour_end); ?>)</span>
                <?php endif; ?>
            </h3>
	    <p><b>Data: </b><?= CoursesModelCourses::convDate($curso->date_start, $curso->date_end); ?></p>
	    <p><b>Hor&aacute;rio: </b><?= CoursesModelCourses::convHour($curso->hour_start, $curso->hour_end); ?></p>

        <?php endif; ?>
	<?php if (!empty($curso->local)): ?>
            <p><b>Local: </b><?php echo $curso->local; ?></p>
        <?php endif; ?>

        

        <?php if ($curso->contact): ?>
              <p><b>Contato: </b><?= $curso->contact; ?></p>
        <?php endif; ?>

	<?php if (!empty($curso->description)): ?>
	    	<p><b>Informações: </b></p>
        	<p><?php echo $curso->description; ?></p>
        <?php endif; ?>


    </div>
<?php endforeach; ?>

<script>
    jQuery(function ($) {
        $(window).on('resize', function () {

            $('.curso-img').each(function () {
                $(this).height($(this).width());
            });

        }).trigger('resize');
    });
</script>