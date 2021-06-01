

    <td class="px-6 py-4 whitespace-nowrap">
        <div class="mt-1 relative my-4">
            <select id="teacher" name="teacher<?php echo $lesson ?>" class=" shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200  py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                <?php
                foreach ($data['teachers'] as $teacher) :
                    echo '<option value="'. $teacher['id'] .'">' . $teacher['family_name'] . ' ' . $teacher['first_name'] . '</option>';
                endforeach;
                ?>
            </select>
        </div>
        <div class="mt-1 relative my-4">
            <select id="subject" name="subject<?php echo $lesson ?>" class=" shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200  py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                <?php
                foreach ($data["subjects"] as $subject) :
                echo '<option value="'. $subject['id'] .'">'.$subject["name"]. '</option>' ;
                                                                    endforeach;
                                                                        ?>
            </select>
        </div>

    </td>

