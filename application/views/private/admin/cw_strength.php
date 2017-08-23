<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:58 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px;">Class Wise Strength</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Class</th>
                    <th>Section</th>
                    <th>Boys</th>
                    <th>Girls</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($sm)): ?>
                    <?php foreach ($sm as $student_det): ?>
                        <tr class="success ">
                            <td><?php echo $student_det->student_class ?></td>
                            <td><?php echo $student_det->student_section ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Route</th>
                    <th>Boys</th>
                    <th>Girls</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($sm)): ?>
                    <?php foreach ($sm as $student_det): ?>
                        <tr class="success ">
                            <td><?php echo $student_det->route ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
