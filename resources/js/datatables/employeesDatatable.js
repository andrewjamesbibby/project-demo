import toastr from 'toastr'

let employeesTable;

/**
 * Initializes the Module
 */
const init = () => {
    setupTable();
    bindDom();
}

/**
 * Bind DOM
 *
 * Binds any events in one convenient location
 */
const bindDom = () => {
   $('#employees_datatable').on('click', '.delete', removeEmployee)
}

/**
 * Setup Table
 *
 * Initializes and configs the companies DataTable
 */
const setupTable = () => {
    employeesTable = $('#employees_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/datatables/employees",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'actions', name: 'actions'},
        ]
    });
}

/**
 * Remove Employee
 *
 * Makes an delete axios call to server to remove
 * employee from the system database
 */
const removeEmployee = (e) => {

    let $rowId = $(e.target).closest('tr').attr('id');

    axios.delete(`/employees/${$rowId}`)
        .then((response) => {
            employeesTable.draw(false)
            toastr.success('Employee removed successfully')
        })
        .catch((error) => {
            toastr.error('Error - please try again.')
        })
}

export default {
    init
};
