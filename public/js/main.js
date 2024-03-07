
const modal = document.getElementById('modal');
const target = document.getElementById('targeted_spec');



const editButtons = document.querySelectorAll('.edit-btn');


const closeModalBtn = document.getElementById('closeModalBtn');
//let form = document.getElementById('edit-form');


function openModal() {
    modal.classList.remove('hidden');
    target.value
}


function closeModal() {
    modal.classList.add('hidden');
}


editButtons.forEach(button => {
    button.addEventListener('click',function(){
        openModal();
        //form.action = "{{ route('Speciality.update',)}}";
        document.querySelector('#targeted_spec').value = this.value

    });
});


closeModalBtn.addEventListener('click', closeModal);
