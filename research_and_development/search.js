function filterProjects() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const projects = document.querySelectorAll('.design-card');
    const suggestions = document.getElementById('suggestions');
    suggestions.innerHTML = ''; // Clear previous suggestions

    let suggestionList = [];

    projects.forEach(project => {
        const title = project.querySelector('.design-title').textContent.toLowerCase();
        if (title.includes(input)) {
            project.style.display = '';
            if (input && !suggestionList.includes(title)) {
                suggestionList.push(title);
            }
        } else {
            project.style.display = 'none';
        }
    });

    // Display suggestions
    if (input) {
        suggestions.style.display = 'block';
        suggestionList.forEach(suggestion => {
            const suggestionItem = document.createElement('div');
            suggestionItem.className = 'suggestion-item';
            suggestionItem.textContent = suggestion;
            suggestionItem.onclick = () => {
                document.getElementById('search-input').value = suggestion;
                filterProjects();
            };
            suggestions.appendChild(suggestionItem);
        });
    } else {
        suggestions.style.display = 'none';
    }
}

function clearSearch() {
    document.getElementById('search-input').value = '';
    filterProjects();
}

