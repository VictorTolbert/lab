<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Locker | Print Labels | <?php echo $program->name; ?></title>
      <link href="<?php echo asset_url(auto_version('css/admin_styles.css')); ?>" rel="stylesheet">
  </head>

  <body>
    <table class="labels">
        <tbody>
            <?php
            $class  = null;
            $in_row = 0;
            foreach($students as $u):
              if ($in_row == 3) {
                // Row is full; start a new one
                if ($in_row) {
                  echo "</tr>\n";
                }

                echo "<tr>\n";
                $in_row = 0;
              }

              if($u->classroom_id !== $class):
                $class  = $u->classroom_id;
                $in_row = 0;
                // New class. End row and request page break. ?>
                    </tr>
                    <tr style="page-break-before: always">
                <?php
              endif;

                // If numeric grade, use that, otherwise take first letter
                $grade = $u->grade_id >= 1 ? $u->grade_id : $u->grade_name[0];
              ?>
                <td>
                    <?php echo "{$u->first_name} {$u->last_name}"; ?>
                    <br><?php echo "{$u->abbreviation} - {$u->class} - $grade"; ?>
                    <br>www.funrun.com

                    <div class="code">
                        Access Code:
                        <?php echo implode('-', str_split($u->fr_code, 3)); ?>
                    </div>
                </td>
              <?php
                ++$in_row;
            endforeach;
            // End a non-empty row
            if ($in_row) {
              echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>
</body>
