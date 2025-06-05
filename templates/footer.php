</div> <!-- Closing container div from header -->

<footer class="page-footer white">
    <div class="container">
        <div class="row">            <div class="col l5 s12">
                <h5 class="logo-text" style="color: var(--primary-color);">Sri Lankan Pizza</h5>
                <p class="grey-text text-darken-1">Premium quality Sri Lankan fusion pizzas crafted with locally sourced ingredients and traditional techniques.</p>
                <div class="footer-contact">
                    <p><i class="material-icons tiny">phone</i> +94 (11) 123-4567</p>
                    <p><i class="material-icons tiny">email</i> info@srilankanpizza.com</p>
                </div>
            </div>
            <div class="col l3 offset-l1 s12">
                <h5 class="text-darken-2" style="font-size: 1.1rem; font-weight: 500; color: var(--text-dark);">Navigation</h5>
                <ul>
                    <li><a class="grey-text text-darken-1" href="index.php">Our Menu</a></li>
                    <li><a class="grey-text text-darken-1" href="add.php">Create Your Pizza</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="text-darken-2" style="font-size: 1.1rem; font-weight: 500; color: var(--text-dark);">Business Hours</h5>
                <ul class="grey-text text-darken-1">
                    <li>Monday - Friday: 11:00 - 22:00</li>
                    <li>Saturday - Sunday: 12:00 - 23:00</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background-color: var(--bg-light); border-top: 1px solid rgba(0,0,0,0.05);">
        <div class="container">
            <div class="row" style="margin-bottom: 0;">                <div class="col s12">
                    <span class="grey-text text-darken-1">© 2025 Sri Lankan Pizza. All rights reserved.</span>
                    <span class="grey-text text-darken-1 right">Designed by Ravindu Sandumith</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    // Initialize Materialize components
    document.addEventListener('DOMContentLoaded', function() {
        // Add animations to cards
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.classList.add('z-depth-2');
            });
            card.addEventListener('mouseleave', function() {
                this.classList.remove('z-depth-2');
            });
        });
    });
</script>
</body>