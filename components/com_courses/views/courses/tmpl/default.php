<?php

defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();

?>
<div class="courses">

    <h2>Cursos</h2>

    <div id="box-filter">
        <form id="filter">
            <label>Mês</label>
            <select id="filter-month" name="month" onchange="this.form.submit();">
                <option value="">Todos</option>
                <?php
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                $month = array();
                $monthSelect = JRequest::getVar('month');
                foreach ($this->filter as $months) {
                    $dateStart = date('Ym', strtotime($months->date_start));
                    $date = date('Y-m-d');
                    if ($months->date_start >= $date) {
                        if (!in_array($dateStart, $month)) {
                            $selected = '';
                            if ($dateStart == $monthSelect) {
                                $selected = 'selected';
                            }
                            echo '<option value="' . $dateStart . '" ' . $selected . '>' .
                                ucfirst(utf8_encode(strftime('%B', strtotime($months->date_start)))) .
                                '</option>';
                            array_push($month, $dateStart);
                        }
                    }
                }
                ?>
            </select>
        </form>

        <?php if (JRequest::getVar('month')): ?>
            <h4>
                <?php
                $mes = substr(JRequest::getVar('month'), 0, 4) . '-' . substr(JRequest::getVar('month'), -2) . '-01';
                echo ucfirst(utf8_encode(strftime('%B', strtotime($mes))))
                ?>
            </h4>
        <?php endif; ?>
    </div>
    <div id="list-courses">
        <?php foreach ($this->courses as $course): ?>
            <div class="course">
                <div class="course-img">
                    <a href="<?php echo JRoute::_('index.php?option=com_courses&view=curso&id=' . $course->id); ?>">
                        <span style="background-image: url(<?= $course->image; ?>)"></span>
                    </a>
                </div>
                <div class="course-desc">
                    <div class="course-data">
                        <h4>
                            <?php echo strftime('%d', strtotime($course->date_start)); ?>
                        </h4>
                        <h3>
                            <?php echo strftime('%b', strtotime($course->date_start)); ?>
                            <span>
                                <?php echo strftime('%Y', strtotime($course->date_start)); ?>
                            </span>
                        </h3>
                    </div>
                    <div class="course-locale">
                        <h1>
                            <a href="<?php echo JRoute::_('index.php?option=com_courses&view=curso&id=' . $course->id); ?>">
                                <?php echo $course->name; ?>
                            </a>
                        </h1>
                        <p>
                            <?= CoursesModelCourses::convDate($course->date_start, $course->date_end); ?>
                            <small>
                                <?= CoursesModelCourses::convHour($course->hour_start, $course->hour_end); ?>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>