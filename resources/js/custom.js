import companiesDatatable from './datatables/companiesDatatable'
import employeesDatatable from './datatables/employeesDatatable'
import logsDatatable from './datatables/logsDatatable'

const init = () => {
    companiesDatatable.init();
    employeesDatatable.init();
    logsDatatable.init();
}

const App = {
    init,
}

export default App;
