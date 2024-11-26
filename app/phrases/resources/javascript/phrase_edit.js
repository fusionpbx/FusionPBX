document.addEventListener("DOMContentLoaded", function () {
	// Initialize the select options
	const select = document.getElementById('phrase_detail_data_empty');
	const grp_rec = document.createElement('optgroup');
	const grp_snd = document.createElement('optgroup');

	// Add a blank entry
	select.appendChild(new Option('', ''));

	// Add recordings
	grp_rec.label = 'Recordings';
	for (let i = 0; i < window.phrase_recordings.length; i++) {
		grp_rec.appendChild(new Option(window.phrase_recordings[i].recording_name, window.phrase_recordings[i].recording_uuid));
	}
	select.appendChild(grp_rec);

	// Add sounds
	grp_snd.label = 'Sounds';
	for (let i = 0; i < window.phrase_sounds.length; i++) {
		grp_snd.appendChild(new Option(window.phrase_sounds[i], window.phrase_sounds[i]));
	}
	select.appendChild(grp_snd);

	// add the existing data
	add_existing();

	// add empty row
	add_row();

	// Initialize draggable rows
	add_draggable_rows();
});

// Inserts all existing records before the empty one
function add_existing() {
	const tbody = document.getElementById('structure');

	for (let i=0; i < window.phrase_details.length; i++) {
		const newRow = document.getElementById('empty_row').cloneNode(true);

		//un-hide the row
		newRow.style.display = '';

		//get the select boxes
		const select_list = newRow.querySelectorAll('td select'); //action and recording select dropdown boxes
		//play, pause, execute select box
		const select_action = select_list[0];
		select_by_text(select_action, 'Play');

		//recording select box
		const select_recording = select_list[1];
		select_by_text(select_recording, window.phrase_details[i]['phrase_detail_display_name']);

		const input_fields = newRow.querySelectorAll('td input');
		const uuid_field = input_fields[0];
		uuid_field.setAttribute('id'  , 'phrase_detail_uuid[' + i +']');
		uuid_field.setAttribute('name', 'phrase_detail_uuid[' + i +']');
		uuid_field.value = window.phrase_details[i]['phrase_detail_uuid'];

		//add the row to the table body
		tbody.appendChild(newRow);
	}
}

function select_by_value(selectElement, valueToFind) {
    // Loop through the options of the select element
    for (let i = 0; i < selectElement.options.length; i++) {
        if (selectElement.options[i].value === valueToFind) {
            selectElement.selectedIndex = i; // Set the selected index
            return; // Exit the loop once found
        }
    }
    console.warn('Value not found in select options');
}

function select_by_text(selectElement, textToFind) {
    for (let i = 0; i < selectElement.options.length; i++) {
        if (selectElement.options[i].text === textToFind) {
            selectElement.selectedIndex = i;
            return;
        }
    }
    console.warn('Text not found in select options');
}

// Add draggable functionality to rows
function add_draggable_rows() {
	const tableBody = document.getElementById('structure');
	let draggedRow = null;

	// Add drag-and-drop functionality
	tableBody.addEventListener('dragstart', (e) => {
		draggedRow = e.target;
		e.target.classList.add('dragging');
	});

	tableBody.addEventListener('dragover', (e) => {
		e.preventDefault();
		const targetRow = e.target.closest('tr');
		if (targetRow && targetRow !== draggedRow) {
			const bounding = targetRow.getBoundingClientRect();
			const offset = e.clientY - bounding.top;
			if (offset > bounding.height / 2) {
				targetRow.parentNode.insertBefore(draggedRow, targetRow.nextSibling);
			} else {
				targetRow.parentNode.insertBefore(draggedRow, targetRow);
			}
		}
	});

	tableBody.addEventListener('dragend', () => {
		draggedRow.classList.remove('dragging');
		draggedRow = null;
	});

}

// Function to update the 'name' attribute based on row numbers
function update_order() {
	const tableBody = document.getElementById('structure');
	const rows = tableBody.querySelectorAll('tr');

	//iterate over all rows to renumber them
	rows.forEach((row, index) => {
		//set 'name' attribute and id
		row.setAttribute('name', 'row_' + index);
		row.id = 'row_' + index;

		//get the select boxes
		const select_list = row.querySelectorAll('td select'); //action and recording select dropdown boxes

		//play, pause, execute select box
		const select_action = select_list[0];

		//recording select box
		const select_recording = select_list[1];

		//set the new id and name for action
		select_action.id = 'phrase_detail_function[' + index + ']'
		select_action.setAttribute('name', 'phrase_detail_function[' + index + ']');
		//set the new id and name for recording
		select_recording.id = 'phrase_detail_data[' + index + ']'
		select_recording.setAttribute('name', 'phrase_detail_data[' + index + ']');
	});
}

function submit_phrase() {
	//ensure order is updated before submitting form
	update_order();
	//submit form
	const form = document.getElementById('frm').submit();
}

// Add a new row to the table
function add_row() {
	const tbody = document.getElementById('structure');
	const newRow = document.getElementById('empty_row').cloneNode(true);

	// current index is the count subtract the hidden row
	const index = tbody.childElementCount - 1;

	//un-hide row
	newRow.style.display = '';

	//reset id
	newRow.id = 'row_' + index;

	//reset 'name' attribute
	newRow.setAttribute('name', 'recording_' + index);

	//add the row to the table body
	tbody.appendChild(newRow);

	//reinitialize draggable functionality on the row
	add_draggable_rows();
}

// Remove the last row in the table
function remove_row() {
	const tbody = document.getElementById('structure');
	if (tbody && tbody.rows.length > 1) {
		tbody.lastElementChild.remove();
	}
}
