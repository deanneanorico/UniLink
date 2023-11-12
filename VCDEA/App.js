import React, { useState } from 'react';
import './App.css';

function App() {
  const [campus, setCampus] = useState('');
  const [address, setAddress] = useState('');
  const [campuses, setCampuses] = useState([]);

  const handleCampusChange = (e) => {
    setCampus(e.target.value);
  };

  const handleAddressChange = (e) => {
    setAddress(e.target.value);
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    // Create a new campus object
    const newCampus = {
      campus_name: campus,
      address: address,
    };

    // Add the new campus to the campuses array
    setCampuses([...campuses, newCampus]);

    // Reset form fields
    setCampus('');
    setAddress('');
  };

  return (
    <div className="App">
      <h1>Campus Manager</h1>
      <form onSubmit={handleSubmit}>
        <div className="form-group">
          <label>Campus</label>
          <input
            type="text"
            className="form-control"
            value={campus}
            onChange={handleCampusChange}
            required
          />
        </div>
        <div className="form-group">
          <label>Address</label>
          <input
            type="text"
            className="form-control"
            value={address}
            onChange={handleAddressChange}
            required
          />
        </div>
        <button type="submit" className="btn btn-primary">
          Add
        </button>
      </form>
      <table className="table mt-4">
        <thead>
          <tr>
            <th>ID</th>
            <th>Campus Name</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          {campuses.map((campus, index) => (
            <tr key={index}>
              <td>{index + 1}</td>
              <td>{campus.campus_name}</td>
              <td>{campus.address}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default App;
