// Fetch and display brands on the homepage
function fetchBrands() {
    // TODO: Implement AJAX call to the backend to get brand data
    console.log("Fetching brands...");
    // On success, call displayBrands() with the retrieved data
}

// Display brands in the brand section
function displayBrands(data) {
    const brandsContainer = document.getElementById('brand-product-section');
    // Clear previous content
    brandsContainer.innerHTML = '';
    // Add each brand to the container
    data.forEach(brand => {
        const brandElement = document.createElement('div');
        brandElement.innerHTML = `<h3>${brand.name}</h3>`;
        // Append more brand details as needed
        brandsContainer.appendChild(brandElement);
    });
}

// Call fetchBrands on page load
window.onload = fetchBrands;

// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Parallax effect initialization
    initializeParallax();
});

function initializeParallax() {
    // Code to initialize parallax effect
}

