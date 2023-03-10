<script>
function errorMessage($message) {
	Toastify({
		text: $message,
		gravity: "top",
		position: "center",
		avatar: "https://iconsplace.com/wp-content/uploads/_icons/ffffff/256/png/error-icon-18-256.png",
		close: true,
		style: {
			background: "#ed3d3d"
		}
	}).showToast();
	i++;
};

function successMessage($message) {
	Toastify({
		text: $message,
		gravity: "top",
		position: "center",
		avatar: "https://static-00.iconduck.com/assets.00/success-icon-512x512-y0ltx23a.png",
		close: true,
		style: {
			background: "#3dc763",
			top: "15px"
		}
	}).showToast();
	i++;
};
  </script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="site/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="site/assets/vendor/aos/aos.js"></script>
  <script src="site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="site/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="site/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="site/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="site/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="site/assets/js/toastify.js"></script>
  <script src="site/assets/js/main.js"></script>