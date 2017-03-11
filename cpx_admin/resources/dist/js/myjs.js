$(document).ready(function() {
    $(".checkbox-all").click(function () {

       //$(this).closest(".content").find("input[type='checkbox']").each(function () {
       //     this.checked = true;
       // });
       // $(this).closest(".content").find(".icheckbox_flat-green").each(function() {
       //     $(this).attr("aria-checked", true).addClass("checked");
       // });
        $(this).closest(".content").find("input[type='checkbox']").iCheck('check');
    });
});