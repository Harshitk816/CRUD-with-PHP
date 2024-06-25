
    const container = document.querySelector('#hobbies');
    const addBtn = document.querySelector('#add-btn');
  
    addBtn.addEventListener('click', () => {
      const newInputDiv = document.createElement('div');
      newInputDiv.className = 'input-div';
      newInputDiv.innerHTML = `
        <input type="text" />
        <button btn btn-primary bg-gradient name="hobbies[]" class="remove-btn">Remove</button>
      `;
      container.appendChild(newInputDiv);
    });
  
    container.addEventListener('click', (e) => {
      if (e.target.classList.contains('remove-btn')) {
        const inputDiv = e.target.parentNode;
        inputDiv.remove();
      }
    });
