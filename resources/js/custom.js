import companiesDatatable from './datatables/companiesDatatable'
import employeesDatatable from './datatables/employeesDatatable'

const init = () => {
    companiesDatatable.init();
    employeesDatatable.init();
}

const App = {
    init,
}

export default App;
