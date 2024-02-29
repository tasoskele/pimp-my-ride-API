# Pimp My Ride

## Description
- This is an educational app to teach the implementation of a RESTful API.

- It is built with the Laravel framework and uses the RESTful API architecture.

- This application is a vehicle healthbook API which allows the user to track the details of their vehicles regarding information such as service and insurance. It provides a centralized location for them to store and manage their vehicle's information, including its details, insurance costs, SVI, and service records. It also implements a user authentication system.

## Features
- **Manage vehicle information:** Add, edit, view and delete vehicle details, including make, model, year, plate number, fuel type.

- **Track insurance information:** Store and manage insurance information, including policy type, company, valid until date, and cost of renewal.

- **Monitor SVI records:** Keep track of SVI dates, costs, and renewal reminders.

- **Maintain service records:** Register, view and edit service records for any information needed, including service type, date, kilometers at the date of service, cost, and service shop name.

- **Secure API access:** Implementation of user authentication system with registration and login for proper authorization mechanisms to control who can access and modify vehicle data.

## Database Structure

### vehicles
| Field       | Type         | Key     | Description |
|-------------|--------------|---------|-------------|
| id          | int          | Primary | Unique identifier for each vehicle |
| user_id     | int          |         | The id of the user who owns the vehicle |
| make        | string       |         | The make of the vehicle |
| model       | string       |         | The model of the vehicle |
| year        | int          |         | The year the vehicle was made |
| plate_number| string       |         | The plate number of the vehicle |
| fuel_type   | string       |         | The type of fuel the vehicle uses |

### insurance
| Field       | Type         | Key     | Description |
|-------------|--------------|---------|-------------|
| id          | int          | Primary | Unique identifier for each insurance entry |
| vehicle_id  | int          |         | The id of the vehicle associated |
| valid_from  | date         |         | The date the insurance is valid from |
| valid_until | date         |         | The date the insurance is valid until |
| company     | string       |         | The company providing the insurance |
| cost        | decimal(10,2)|         | The cost of the insurance |
| kilometers  | int          |         | The kilometers of the vehicle at the time of insurance |

### svi
| Field       | Type         | Key     | Description |
|-------------|--------------|---------|-------------|
| id          | int          | Primary | Unique identifier for each SVI entry |
| vehicle_id  | int          |         | The id of the vehicle associated |
| date        | date         |         | The date of the SVI |
| valid_until | date         |         | The date the SVI is valid until |
| cost        | decimal(10,2)|         | The cost of the SVI |
| kilometers  | int          |         | The kilometers of the vehicle at the time of SVI |

### service
| Field       | Type         | Key     | Description |
|-------------|--------------|---------|-------------|
| id          | int          | Primary | Unique identifier for each service entry |
| vehicle_id  | int          |         | The id of the vehicle associated |
| details     | text         |         | The details of the service |
| type        | enum('minor', 'major', 'emergency') |         | The type of service (minor, major, emergency) |
| date        | date         |         | The date of the service |
| kilometers  | int          |         | The kilometers of the vehicle at the time of service in kilometers |
| cost        | decimal(10,2)|         | The cost of the service |
| shop        | string       |         | The shop where the service was performed |

## API endpoints
- vehicles
  - GET /vehicles
    - return all vehicle entries
  - GET /vehicles/{vehicle_id}
    - return single vehicle information
  - POST /vehicles
    - create a new vehicle entry
  - PUT /vehicles/{vehicle_id}
    - update information for a specific vehicle
  - DELETE /vehicles/{vehicle_id}
    - delete a specific vehicle

- insurances
  - GET /vehicles/{vehicle_id}/insurances
    - return all insurance entries for a specific vehicle
  - GET /vehicles/{vehicle_id}/insurances/{insurance_id}
    - return single insurance information for a specific vehicle
  - POST /vehicles/{vehicle_id}/insurances
    - create a new insurance entry for a specific vehicle
  - PUT /vehicles/{vehicle_id}/insurances/{insurance_id}
    - update information for a specific insurance of a specific vehicle
  - DELETE /vehicles/{vehicle_id}/insurances/{insurance_id}
    - delete a specific insurance of a specific vehicle

- svis
  - GET /vehicles/{vehicle_id}/svis
    - return all svi entries for a specific vehicle
  - GET /vehicles/{vehicle_id}/svis/{svi_id}
    - return single svi information for a specific vehicle
  - POST /vehicles/{vehicle_id}/svis
    - create a new svi entry for a specific vehicle
  - PUT /vehicles/{vehicle_id}/svis/{svi_id}
    - update information for a specific svi of a specific vehicle
  - DELETE /vehicles/{vehicle_id}/svis/{svi_id}
    - delete a specific svi of a specific vehicle

- services
  - GET /vehicles/{vehicle_id}/services
    - return all service entries for a specific vehicle
  - GET /vehicles/{vehicle_id}/services/{service_id}
    - return single service information for a specific vehicle
  - POST /vehicles/{vehicle_id}/services
    - create a new service entry for a specific vehicle
  - PUT /vehicles/{vehicle_id}/services/{service_id}
    - update information for a specific service of a specific vehicle
  - DELETE /vehicles/{vehicle_id}/services/{service_id}
    - delete a specific service of a specific vehicle