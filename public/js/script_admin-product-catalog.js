function updateProduct(productId) {
    console.log('Update product with ID:', productId);

    const price = prompt('Enter the updated price:');
    const category = prompt('Enter the updated category:');
    const itemName = prompt('Enter the updated item name:');

    if (price && category && itemName) {
        // Make an AJAX call to update the product
        fetch(`/update-product/${productId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ price, category, item_name: itemName }),
        })
            .then((response) => {
                if (response.ok) {
                    alert('Product updated successfully');
                    // Reload the page to see the updated data
                    location.reload();
                } else {
                    alert('Failed to update product');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred while updating the product');
            });
        }
    }

    function deleteProduct(productId) {
        console.log('Delete product with ID:', productId);
    }
