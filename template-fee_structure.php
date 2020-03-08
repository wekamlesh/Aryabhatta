<?php

/*
Template Name: student fee
*/
?>

<?php get_header(); ?>

<div class="container">
<h1 class="text-uppercase custom-h1">Student info</h1>
<div style="margin-top:30px"></div>
<table class="table table-bordered">
        <thead>
            <th>Class</th>
            <th>1st Installment ₹.</th>
            <th>2nd Installment ₹.</th>
            <th>3nd Installment ₹</th>
            <th>Total Fee ₹.</th>
        </thead>
        <tbody>
            <tr>
                <th scope="row">I</th>
                <td>9000</td>
                <td>8000</td>
                <td>7000</td>
                <td>24000</td>
            </tr>
            <tr>
                <th scope="row">II</th>
                <td>9000</td>
                <td>8000</td>
                <td>8000</td>
                <td>25000</td>
            </tr>
            <tr>
                <th scope="row">III</th>
                <td>9000</td>
                <td>9000</td>
                <td>8000</td>
                <td>26000</td>
            </tr>
            <tr>
                <th scope="row">IV</th>
                <td>10000</td>
                <td>9000</td>
                <td>8000</td>
                <td>27000</td>
            </tr>
            <tr>
                <th scope="row">V</th>
                <td>10000</td>
                <td>10000</td>
                <td>8000</td>
                <td>28000</td>
            </tr>
            <tr>
                <th scope="row">VI</th>
                <td>10000</td>
                <td>10000</td>
                <td>8000</td>
                <td>28000</td>
            </tr>
            <tr>
                <th scope="row">VII</th>
                <td>10000</td>
                <td>10000</td>
                <td>8000</td>
                <td>28000</td>
            </tr>
            <tr>
                <th scope="row">VIII</th>
                <td>10000</td>
                <td>10000</td>
                <td>8000</td>
                <td>28000</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container" style="margin-bottom:20px">
    <a href="<?php bloginfo('template_directory'); ?>/img/TC-form.pdf" download="TC form"><button type="button" class="btn btn-primary">Click to Download TC</button></a>
</div>


<?php get_footer(); ?>


