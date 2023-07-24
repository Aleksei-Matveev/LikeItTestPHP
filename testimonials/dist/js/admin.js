window.admin = {
    activateReview:  (id) => {
        let url = 'http://likeit.local/testimonials/admin/api/activate/';
        admin.sendRequest(url, id)
    },
    deleteReview: async (id) => {
        let url = 'http://likeit.local/testimonials/admin/api/delete/';
        admin.sendRequest(url, id)
    },
    sendRequest: async (url, id)=>{
        let response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify({'id': id})
        });
        await response.json();
        location.reload();
    }
};


const status_collection = document.querySelectorAll('.status-btn');
if (status_collection) {
    status_collection.forEach((target) => {
        target.addEventListener('click', (item) => {
            admin.activateReview(item.target.dataset.id);
        })
    })
}
const delete_buttons = document.querySelectorAll('.delete-btn');
if (delete_buttons) {
    delete_buttons.forEach((target) => {
        target.addEventListener('click', (item) => {
            admin.deleteReview(item.target.dataset.id);
        })
    })
}