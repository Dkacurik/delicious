const toggleCreateReservationModal = () => {
    const modal = document.getElementById('createReservationModal');
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
    } else {
        modal.classList.add('hidden');
    }
}

const removeReservationButton = (e) => {
    const id = e.target.dataset.reservationid

    const token = document.querySelector('meta[name="csrf-token"]').content;
    fetch(`/reservations/${id}`, {
        method: 'DELETE',
        headers: {
            "X-CSRF-TOKEN": token
        }
    }).then(() => {
        console.log('deleted')
        location.reload()
    })
}

const editReservationButton = (e) => {
    const id = e.target.dataset.reservationid
    const token = document.querySelector('meta[name="csrf-token"]').content;

    fetch(`/reservations/${id}`, {
        method: 'GET',
        headers: {
            "X-CSRF-TOKEN": token
        }
    }).then((response) => response.json())
        .then((data) => {
           const reservation = data.reservation
            document.getElementById('reservationDate').value = reservation.date;
            document.getElementById('reservationTime').value = reservation.time;
            document.getElementById('reservationName').value = reservation.name;
            document.getElementById('reservationEmail').value = reservation.email;
            document.getElementById('reservationNote').value = reservation.note;
            document.getElementById('reservationId').value = reservation.id;

            const createBtn = document.getElementById('addNewReservationToggle')
            const editBtn = document.getElementById('editReservationToggle')
            if(!createBtn.classList.contains('hidden')){
                createBtn.classList.add('hidden')
            }

            if(editBtn.classList.contains('hidden')){
                editBtn.classList.remove('hidden')
            }

            document.getElementById('modalTitle').innerHTML = 'Editovať rezerváciu'

            toggleCreateReservationModal()
        })
}

const addReservationBtn = document.getElementById('toggleCreateReservationModal')
const closeReservationBtn = document.getElementById('closeCreateReservationModal')
const editBtn = document.getElementById('editReservationToggle')

if (addReservationBtn != null){
    addReservationBtn.addEventListener('click', () => {
        const createBtn = document.getElementById('addNewReservationToggle')
        const editBtn = document.getElementById('editReservationToggle')
        if(!editBtn.classList.contains('hidden')){
            editBtn.classList.add('hidden')
        }

        if(createBtn.classList.contains('hidden')){
            createBtn.classList.remove('hidden')
        }

        document.getElementById('modalTitle').innerHTML = 'Pridať rezerváciu'
    })
    addReservationBtn.addEventListener('click', toggleCreateReservationModal)
}

if (closeReservationBtn != null){
    closeReservationBtn.addEventListener('click', toggleCreateReservationModal)
}

if (editBtn != null){
    editBtn.addEventListener('click', (e) => {
        e.preventDefault()
        const fd = new FormData(document.getElementById('formCreateNewReservation'))
        const id =  document.getElementById('reservationId').value;
        const token = document.querySelector('meta[name="csrf-token"]').content;
        for (var pair of fd.entries()) {
            console.log(pair[0]+ ', ' + pair[1]);
        }
        fetch(`/reservations/${id}`, {
            method: 'POST',
            body: fd,
            headers: {
                "X-CSRF-TOKEN": token,
            }
        }).then((res) => {
            if (res.ok) {
                location.reload();
            } else {
                alert('Datum s tymto casom uz bol pouzity')
            }
        })
    })
}

const formCreateNewReservation = document.getElementById('formCreateNewReservation')

if (formCreateNewReservation != null){
    formCreateNewReservation.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(formCreateNewReservation);
        const token = document.querySelector('meta[name="csrf-token"]').content;
        fetch('/reservations', {
            method: 'POST',
            body: formData,
            headers: {
                "X-CSRF-TOKEN": token
            }
        }).then((res) => {
            if (res.ok) {
                location.reload()
            } else {
                alert('Datum s tymto casom uz bol pouzity')
            }
        })
    })
}

const deleteReservationButtons = document.getElementsByClassName('remove-reservation')

if (deleteReservationButtons != null){
    for (var i = 0; i < deleteReservationButtons.length; i++) {
        deleteReservationButtons[i].addEventListener('click', removeReservationButton);
    }
}
const editReservationButtons = document.getElementsByClassName('edit-reservation')

if (editReservationButtons != null){
    for (var i = 0; i < editReservationButtons.length; i++) {
        editReservationButtons[i].addEventListener('click', editReservationButton);
    }
}

