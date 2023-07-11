function filterImages() {
    var selectElement = document.getElementById("sort-select");
    var selectedCategory = selectElement.value;

    var columns = document.getElementsByClassName("column");

    // Hide all columns
    for (var i = 0; i < columns.length; i++) {
        columns[i].style.display = "none";
  }

    // Show columns with the selected category
    if (selectedCategory === "All") {
    // Show all columns if "All" is selected
    for (var i = 0; i < columns.length; i++) {
        columns[i].style.display = "block";
    }
  } else {
    // Show columns matching the selected category
    var categoryColumns = document.getElementsByClassName(selectedCategory);
    for (var i = 0; i < categoryColumns.length; i++) {
        categoryColumns[i].style.display = "block";
    }
  }
}


