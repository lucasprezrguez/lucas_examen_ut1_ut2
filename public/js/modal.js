function openEditModal(id) {
    fetch(`/messages/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editText').value = data.text;
            document.getElementById('editColor').value = data.color;
            document.getElementById('editImage_url').value = data.image_url;
            document.getElementById('editUnderline').value = data.underline;
            document.getElementById('editBold').value = data.bold;
            document.getElementById('editForm').action = `/message/${id}`;
            document.getElementById('editModal').classList.add('active');
            document.getElementById('modalOverlay').classList.add('active');
        });
}

function closeEditModal() {
    document.getElementById('editModal').classList.remove('active');
    document.getElementById('modalOverlay').classList.remove('active');
}

document.getElementById('modalOverlay').addEventListener('click', function () {
    closeEditModal();
});