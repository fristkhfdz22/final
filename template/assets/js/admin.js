document.getElementById('sidebarToggle').addEventListener('click', function() {
    let sidebar = document.getElementById('admin-sidebar');
    let content = document.getElementById('admin-content');
    
    sidebar.classList.toggle('closed');
    content.classList.toggle('expanded');
});
