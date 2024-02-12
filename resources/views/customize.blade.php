@extends('dashboard')

<div class="container mt-4 mb-4">
    <div class="border p-4 selected-bead-container">
        <!-- Buttons for clearing and adding to cart -->
        
    </div>
</div>

<section id="customize" class="product-section">
    <div class="container mt-4 mb-4">
        <div class="border p-4">
            <div class="row">
                <!-- Bracelet Product 1 -->
                @foreach ($beads as $bead)
                    <div class="col mb-4">
                        <a href="#" class="bead-link" data-bead="{{ $bead->bead }}">
                            <div class="card">
                                <img src="{{ asset('beads/' . $bead->bead) }}" class="card-img-top bead-img"
                                    alt="{{ $bead->id }}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button id="clearBtn" class="btn btn-danger mb-2">Clear</button>
            <button id="addToCartBtn" class="btn btn-success mb-2">Add to Cart</button>
        </div>
    </div>
</section>
    

<style>
    .bead-img {
        max-width: 100px; 
        max-height: 100px; 
    }

    .selected-bead-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; 
    }

    .selected-bead-container img {
        max-width: 50px; 
        max-height: 50px; 
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectedBeadContainer = document.querySelector('.selected-bead-container');

        // Add click event listener to each bead link
        document.querySelectorAll('.bead-link').forEach(function (beadLink) {
            beadLink.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior

                var beadImageSrc = beadLink.dataset.bead; // Get the bead image src

                // Create an image element for the selected bead
                var selectedBeadImage = document.createElement('img');
                selectedBeadImage.src = "{{ asset('beads/') }}" + '/' + beadImageSrc;
                selectedBeadImage.alt = 'Selected Bead';
                selectedBeadImage.classList.add('selected-bead');

                // Append the selected bead image to the selected bead container
                selectedBeadContainer.appendChild(selectedBeadImage);
            });
        });

        // Clear button functionality
        document.getElementById('clearBtn').addEventListener('click', function () {
            selectedBeadContainer.innerHTML = ''; // Remove all beads
        });

        // Delete button functionality
        selectedBeadContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('selected-bead')) {
                event.target.remove(); // Remove the clicked bead
            }
        });

        // Add to cart button functionality
        document.getElementById('addToCartBtn').addEventListener('click', function () {
            // Implement your logic for adding beads to the cart
            alert('Adding beads to cart...');
        });
    });
</script>
