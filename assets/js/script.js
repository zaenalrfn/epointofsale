// bagian transaksi payment
payment()
function payment() {
	const paymentCard = document.querySelectorAll('.payment .card');
	paymentCard.forEach((pC) => {
		pC.addEventListener('click', function(p){
			const paymentActive = document.querySelector('.payment .active');
			paymentActive.classList.remove('active')
			const cardActive = p.currentTarget;
			cardActive.classList.add('active')

			
		})
	})
}
// bagian akhir payment