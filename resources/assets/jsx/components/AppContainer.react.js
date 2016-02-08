import React, { Component } from 'react';
import { connect } from 'react-redux';

var AppContainer = React.createClass({
    render: function() {
        return (
            <div>
                {this.props.children}
            </div>
        );
    }
});

// REDUX STUFF

// Which props do we want to inject, given the global state?
function select(state) {
  return {
    data: state
  };
}

// Wrap the component to inject dispatch and state into it
export default connect(select)(AppContainer);