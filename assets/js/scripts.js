$(document).ready(function() {
	let items = $('.dashboard-item');
	for(let x=0; x<items.length; x++){
		items[x].addEventListener('click',e=>{
			let data_id =e.target.getAttribute("data-id");
			// console.log(data_id);
			// return;
			//
			switch(data_id){
				case 'updates':
				fetch('forms/add-update.php').then(response=>response.text()).then(html=>{
					$('#forms_holder').html(html);
				}).catch(err=>console.log(err));
				break;
				case 'faq':
				fetch('forms/add-faq.php').then(response=>response.text()).then(html=>{
					$('#forms_holder').html(html);
				}).catch(err=>console.log(err));
				break;
				case 'services':
				fetch('forms/add-services.php').then(response=>response.text()).then(html=>{
					$('#forms_holder').html(html);
				}).catch(err=>console.log(err));
				break;
				case 'messages':
				fetch('messages.php').then(response=>response.text())
				.then(messages=>{
					$('#forms_holder').html(messages);
				}).catch(err=>console.log(err));
				break;
				default:
				console.log('Seems like no match was found');
			}
		});
	}
});

//modal for carousel images
// function openModal(img,title,description){
// console.log(img);
// console.log(title);
// console.log(description);
// }
function openModal(elem){
	//nodelist one -image
	//nodelist 3- carousel caption
	let title = elem.childNodes[3].childNodes[1].innerText;
	let imageSource = elem.childNodes[1].getAttribute('src');
	let description = elem.childNodes[3].childNodes[3].innerText;

	//setting up the modal
	$('#carouselModalHeader').text(title);
	$('#carouselModalDescription').text(description);
	$('#carouselImage').attr('src',imageSource)
	//open modal
	$('#carouselImageModal').modal('toggle');
}