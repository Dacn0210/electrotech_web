cy.on('uncaught:exception', (err, runnable) => {
  if (err.message.includes('Cannot read properties of null (reading addEventListener)')) {
    return false
  }
})

const datos = {
  user: 'Dacn2004',
  contra: '12345678',
  nombreprod: 'Xiaomi Real 2',
  descprod: 'Muy buen celular :p',
  precioprod: '500000',
  stockprod:'15'

};

describe('Prueba Login', () => {

  it('Inicio de Sesión', () => {
    
    
    cy.visit('http://localhost/Electrotech')
    cy.get(':nth-child(2) > .nav-item > .nav-link').click()
    cy.get('#username').type(datos.user)
    cy.get('#password').type(datos.contra)
    cy.get('button').click()
    cy.get('#titulo').should('have.text','¡Bienvenido, Dacn2004!')

    cy.get('.menu-links > :nth-child(2) > a > .fa-solid').click()
    cy.get('#addprod').click()
    cy.get('form > :nth-child(1) > #nombre').type(datos.nombreprod)
    cy.get(':nth-child(3) > #descripcion').type(datos.descprod)
    cy.get(':nth-child(4) > #precio').type(datos.precioprod)
    cy.get(':nth-child(5) > #proveedor').select('Xiaomi')
    cy.get(':nth-child(6) > #stock').type(datos.stockprod)
    cy.get('.btn-primary > .fa-solid').click()
    cy.get('.alert').should('be.visible')

    cy.get(':nth-child(1) > .last > [data-bs-target="#deleteModal"] > .fa-solid').click()
    cy.get('#deleteModal > .modal-dialog > .modal-content').should('be.visible')
    cy.get('.btn-danger').click()
    




    // 
    // 
    // 

    
  })



  
})

