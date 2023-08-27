$(document).ready(function() {

    function addRemoveClass(theRows) {

        theRows.removeClass("odd even");
        theRows.filter(":odd").addClass("odd");
        theRows.filter(":even").addClass("even");
    }

    var rows = $("table#example tr:not(:first-child)");

    addRemoveClass(rows);


    $("#fetch").on("change", function() {

        var selected = this.value;

        if (selected != "All") {

            rows.filter("[value=" + selected + "]").show();
            rows.not("[value=" + selected + "]").hide();
            var visibleRows = rows.filter("[value=" + selected + "]");
            addRemoveClass(visibleRows);
        } else {

            rows.show();
            addRemoveClass(rows);

        }

    });
});