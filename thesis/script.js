const handles = document.querySelectorAll('.accordion input[type="checkbox"]');

handles.forEach((handle) => {
  handle.addEventListener('change', function () {
    if (this.checked) {
      // Collapse other handles
      handles.forEach((otherHandle) => {
        if (otherHandle !== this) {
          otherHandle.checked = false;
        }
      });
    }
  });
});

