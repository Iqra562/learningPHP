<script>
    // JavaScript logic to capture selected row data in modl
    document.querySelectorAll('.edit-btn').forEach((button) => {
    button.addEventListener('click', (event) => {
        const row = button.closest('tr');
        const categoryId = row.querySelector("#c_id").innerHTML;
        const categoryName = row.querySelector("#c_name").innerHTML;
        const categoryImage = row.querySelector("#c_image").src;

        // data of selected row in modal form
        document.getElementById('modal-category-id').value = categoryId;
        document.getElementById('modal-category-name').value = categoryName;
        document.getElementById('modal-category-image').src = categoryImage;
    });
});

</script>