// Add Record

// READ records
function readRecords() {
    $.get("read.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}