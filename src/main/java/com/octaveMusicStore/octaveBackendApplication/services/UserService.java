package com.octaveMusicStore.octaveBackendApplication.services;

import com.octaveMusicStore.octaveBackendApplication.requests.CreateUserRequest;
import com.octaveMusicStore.octaveBackendApplication.responses.CreateUserResponse;

public interface UserService {
    CreateUserResponse addUser(CreateUserRequest createUserRequest);
}
