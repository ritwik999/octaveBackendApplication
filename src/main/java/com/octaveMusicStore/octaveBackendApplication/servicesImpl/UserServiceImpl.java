package com.octaveMusicStore.octaveBackendApplication.servicesImpl;

import com.octaveMusicStore.octaveBackendApplication.models.User;
import com.octaveMusicStore.octaveBackendApplication.models.UserStatus;
import com.octaveMusicStore.octaveBackendApplication.requests.CreateUserRequest;
import com.octaveMusicStore.octaveBackendApplication.responses.CreateUserResponse;
import com.octaveMusicStore.octaveBackendApplication.respositories.UserRepository;
import com.octaveMusicStore.octaveBackendApplication.services.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserServiceImpl implements UserService {

    @Autowired
    private UserRepository userRepository;
    @Override
    public CreateUserResponse addUser(CreateUserRequest createUserRequest) {

        User userFromDb= this.userRepository.findByEmail(createUserRequest.getUserEmail());

        if (userFromDb==null){
            User user=createUserRequest.toUser();
            user.setUserStatus(UserStatus.ACTIVE);
            userFromDb=this.userRepository.save(user);
        }

        return CreateUserResponse.builder().
                email(createUserRequest.getUserEmail()).
                message("User has been created !").
                build();
    }
}
