import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { Router, Route } from 'react-router';
import { createStore, applyMiddleware } from 'redux';
import thunk from 'redux-thunk';
import createHistory from 'history/lib/createBrowserHistory';

// Import the pages
import HomePage from './components/pages/HomePage.react';
import NotFoundPage from './components/pages/NotFoundPage.react';
import AppContainer from './components/AppContainer.react';

// Create the store with the redux-thunk middleware
import rootReducer from './reducers/rootReducer';
const createStoreWithMiddleware = applyMiddleware(thunk)(createStore);
const store = createStoreWithMiddleware(rootReducer);

ReactDOM.render(
    <Provider store={store}>
        <Router history={createHistory()}>
            <Route component={AppContainer}>
                <Route path="/" component={HomePage} />
                <Route path="*" component={NotFoundPage} />
            </Route>
        </Router>
    </Provider>, 
    document.getElementById("react-app"));