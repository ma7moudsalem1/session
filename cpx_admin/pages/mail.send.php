<form action="#" method="post">

    <div class="box box-info">
    <div class="box-header">

        <i class="fa fa-envelope"></i>

        <h3 class="box-title">Compose Email</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
        <div class="clear"></div>

        <!-- /. tools -->
    </div>
    <div class="box-body">
                <div class="form-group">
                <input type="email" class="form-control" name="emailto" value="" placeholder="Email to:">
            </div>
            <div class="form-group">
                <input type="hidden" name="hash" value="9B95pbZd9yTrAHaD">
                <input type="text" class="form-control" value="" name="subject" placeholder="Subject">
            </div>
            <div>
                <textarea name="message" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
    </div>
    <div class="box-footer clearfix">
        <button type="submit" name="submit" class="pull-right btn btn-default" id="sendEmail">Send
            <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</div>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $to = $_POST['emailto'];
        $subj = $_POST['subject'];
        $message = $_POST['message'];
        mail($to, $subj, $message);
        echo "<script>window.open('?p=mail.view', '_self')</script>";
    }

    ?>