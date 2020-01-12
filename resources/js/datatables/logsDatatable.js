
let logTable;

/**
 * Initializes the Module
 */
const init = () => {
    setupTable();
}

/**
 * Setup Table
 *
 * Initializes and configs the companies DataTable
 */
const setupTable = () => {
    logTable = $('#logs_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/datatables/logs",
        columns: [
            {data: 'action', name: 'action'},
            {data: 'message', name: 'message'},
            {data: 'created_at', name: 'created_at'},
        ]
    });
}

export default {
    init
};
