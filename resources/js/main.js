console.log('test')
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

const removeServiceButton = (e) => {
    const id = e.target.dataset.serviceid

    const token = document.querySelector('meta[name="csrf-token"]').content;
    fetch(`/service/${id}`, {
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
const editServiceBtn = document.getElementById('editServiceToggle')

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

if (editServiceBtn != null){
    editServiceBtn.addEventListener('click', (e) => {
        e.preventDefault()
        const fd = new FormData(document.getElementById('formCreateNewService'))
        const id =  document.getElementById('serviceId').value;
        const token = document.querySelector('meta[name="csrf-token"]').content;
        for (var pair of fd.entries()) {
            console.log(pair[0]+ ', ' + pair[1]);
        }
        fetch(`/service/${id}`, {
            method: 'POST',
            body: fd,
            headers: {
                "X-CSRF-TOKEN": token,
            }
        }).then((res) => {
            if (res.ok) {
                location.reload();
            } else {
                alert('Chyba')
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

const formCreateNewService = document.getElementById('formCreateNewService')

if (formCreateNewService != null){
    formCreateNewService.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(formCreateNewService);
        const token = document.querySelector('meta[name="csrf-token"]').content;
        fetch('/service', {
            method: 'POST',
            body: formData,
            headers: {
                "X-CSRF-TOKEN": token
            }
        }).then((res) => {
            if (res.ok) {
                location.reload()
            } else {
                alert('Chyba')
            }
        })
    })
}

const editServiceButton = (e) => {
    console.log(e.target.dataset)
    const id = e.target.dataset.serviceid
    const token = document.querySelector('meta[name="csrf-token"]').content;
    console.log(id)
    fetch(`/service/${id}`, {
        method: 'GET',
        headers: {
            "X-CSRF-TOKEN": token
        }
    }).then((response) => response.json())
        .then((data) => {
            const service = data.service
            document.getElementById('serviceTitle').value = service.title;
            document.getElementById('servicePrice').value = service.price;
            document.getElementById('serviceId').value = service.id;


            const createBtn = document.getElementById('addNewServiceToggle')
            const editBtn = document.getElementById('editServiceToggle')
            if(!createBtn.classList.contains('hidden')){
                createBtn.classList.add('hidden')
            }

            if(editBtn.classList.contains('hidden')){
                editBtn.classList.remove('hidden')
            }

            document.getElementById('modalTitle').innerHTML = 'Editovať službu'

            toggleCreateReservationModal()
        })
}

const editServiceButtons = document.getElementsByClassName('edit-service')

if (editServiceButtons != null){
    for (var i = 0; i < editServiceButtons.length; i++) {
        editServiceButtons[i].addEventListener('click', editServiceButton);
    }
}

const deleteServiceButtons = document.getElementsByClassName('remove-service')

if (deleteServiceButtons != null){
    for (var i = 0; i < deleteServiceButtons.length; i++) {
        deleteServiceButtons[i].addEventListener('click', removeServiceButton);
    }
}


