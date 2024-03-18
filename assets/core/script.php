<script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function () {
                output.innerHTML = this.value;
            }
        </script>
        <script>
            var slider = document.getElementById('price-slider');
            var products = document.querySelectorAll('.shopBox');

            var prices = Array.from(products).map(function (product) {
                return parseFloat(product.querySelector('.prijs2').textContent.replace('€ ', '').replace('.', '').replace(',', '.'));
            });
// max en minimale prijs
            var minPrice = Math.min(...prices); 
            var maxPrice = 4000; 
            slider.min = minPrice;
            slider.max = maxPrice;

            var selectedPrice = maxPrice;

            slider.value = selectedPrice;

            slider.addEventListener('input', function () {
                var selectedPrice = parseFloat(slider.value);
                products.forEach(function (product) {
                    var price = parseFloat(product.querySelector('.prijs2').textContent.replace('€ ', '').replace('.', '').replace(',', '.'));
                    if (price > selectedPrice) {
                        product.style.display = 'none';
                    } else {
                        product.style.display = 'block';
                    }
                });
                document.getElementById('slider-value').textContent = '€' + selectedPrice.toLocaleString('nl-NL', { minimumFractionDigits: 2 });
            });

            slider.dispatchEvent(new Event('input'));
        </script>